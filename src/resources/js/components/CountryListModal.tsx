import React from "react";
import Modal from "./Modal";
import Api, { Country } from "../networking/api";
import { useState, useEffect } from "react";
import Table from "./Table";
import CountryFlag from "./misc/CountryFlag";
import TextInput from "./input/TextInput";

interface Props {
    id: string;
    title: string;
    handler: any;
}

const CountryListModal: React.FC<Props> = (props: Props) => {
    const [countries, setCountries] = useState<Array<Country>>([]);
    const [countrySearch, setCountrySearch] = useState<String>("");

    useEffect(() => {
        Api.getCountries(true).then((response) => {
            if (response && response.status === Api.STATUS_OK) {
                setCountries(response.data.data);
            }
        });
    }, []);

    const renderTableHeaderRow = () => {
        return (
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        );
    };

    const renderTableBodyRows = () => {
        // filter countries from search input
        let filteredCountries = countries;
        if (countrySearch) {
            filteredCountries = countries.filter((country: Country) => {
                const countryName = country.name.toLowerCase();
                if (countryName.startsWith(countrySearch.toLowerCase())) {
                    return country;
                }
            });
        }

        return filteredCountries.map((country: Country) => {
            return (
                <tr>
                    <td className="flex">
                        <CountryFlag countryCode={country.iso_3166_1_alpha_2} />
                        <div className="mx-5 my-auto">{country.name}</div>
                    </td>
                    <td>
                        <button
                            className="btn btn-sm"
                            onClick={() => props.handler(country.id)}
                        >
                            Select
                        </button>
                    </td>
                </tr>
            );
        });
    };

    return (
        <React.Fragment>
            {/* Property Modal */}
            <Modal id={props.id} title={props.title}>
                {/* Search Input */}
                <TextInput
                    title="Search by name..."
                    value={countrySearch}
                    handler={setCountrySearch}
                />
                {/* Table */}
                <div className="flex h-96 mt-4">
                    <Table
                        headerRow={renderTableHeaderRow()}
                        bodyRows={renderTableBodyRows()}
                    />
                </div>
            </Modal>
        </React.Fragment>
    );
};

export default CountryListModal;
