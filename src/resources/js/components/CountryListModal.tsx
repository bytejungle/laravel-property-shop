import React from "react";
import Modal from "./Modal";
import Api, { Country } from "../networking/api";
import { useState, useEffect } from "react";
import Table from "./Table";
import CountryFlag from "./misc/CountryFlag";

interface Props {
    id: string;
    title: string;
    handler: any;
}

const CountryListModal: React.FC<Props> = (props: Props) => {
    const [countries, setCountries] = useState<Array<Country>>([]);

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
        return countries.map((country: Country) => {
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
                <div className="flex h-96">
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
