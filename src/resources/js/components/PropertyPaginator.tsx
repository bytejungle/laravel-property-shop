import React from "react";
import { useState, useEffect } from "react";
import Api, { RequestOptions } from "../networking/api";
import { toast } from "react-toastify";
import Card from "./card/Card";
import Spinner from "./Spinner";
import CardBody from "./card/CardBody";

import CountryDropSelectInput from "./input/CountryDropSelectInput";
import NumberDropSelectInput from "./input/NumberDropSelectInput";

interface Props {
    countryId: number;
    bedroomCount: number;
    bathroomCount: number;
    carSpaceCount: number;
    handler: any;
}

const PropertyPaginator: React.FC<Props> = (props: Props) => {
    const [currentPage, setCurrentPage] = useState<number>(1);
    const [isLoading, setIsLoading] = useState<Boolean>(false);

    // filter state
    const [selectedCountryId, setSelectedCountryId] =
        useState<Number>(undefined);
    const [selectedBedroomCount, setSelectedBedroomCount] = useState<
        Number | undefined
    >(undefined);
    const [selectedBathroomCount, setSelectedBathroomCount] = useState<
        Number | undefined
    >(undefined);
    const [selectedCarSpaceCount, setSelectedCarSpaceCount] = useState<
        Number | undefined
    >(undefined);

    useEffect(() => {
        const requestOptions: RequestOptions = { page: currentPage };

        // create property filter
        const propertyFilter = {
            country: selectedCountryId,
            bedroomCount: selectedBedroomCount,
            bathroomCount: selectedBathroomCount,
            carSpaceCount: selectedCarSpaceCount,
        };

        setIsLoading(true);
        Api.getProperties(requestOptions, propertyFilter)
            .then((response) => {
                toast.info("Loading properties...");
                if (response && response.status === Api.STATUS_OK) {
                    props.handler(response.data.data);
                }
            })
            .finally(() => {
                setIsLoading(false);
            });
    }, [
        currentPage,
        selectedCountryId,
        selectedBedroomCount,
        selectedBathroomCount,
        selectedCarSpaceCount,
    ]);

    const onPreviousPageClicked = () => {
        if (currentPage === 1) return;
        setCurrentPage(currentPage - 1);
    };

    const onNextPageClicked = () => {
        setCurrentPage(currentPage + 1);
    };

    const clearFilter = () => {
        setSelectedCountryId(undefined);
        setSelectedBedroomCount(undefined);
        setSelectedBathroomCount(undefined);
        setSelectedCarSpaceCount(undefined);
    };

    const renderFilter = () => {
        return (
            <div className="columns-4">
                <CountryDropSelectInput
                    title="Country:"
                    value={selectedCountryId}
                    handler={setSelectedCountryId}
                />
                <NumberDropSelectInput
                    numberMin={0}
                    numberMax={5}
                    title="Minimum bedroom count:"
                    value={selectedBedroomCount}
                    handler={setSelectedBedroomCount}
                />
                <NumberDropSelectInput
                    numberMin={0}
                    numberMax={5}
                    title="Minimum bathroom count:"
                    value={selectedBathroomCount}
                    handler={setSelectedBathroomCount}
                />
                <NumberDropSelectInput
                    numberMin={0}
                    numberMax={5}
                    title="Minimum car space count:"
                    value={selectedCarSpaceCount}
                    handler={setSelectedCarSpaceCount}
                />
            </div>
        );
    };

    const renderPaginator = () => {
        return (
            <div className="w-full flex">
                <div className="join">
                    <button
                        className="join-item btn"
                        onClick={onPreviousPageClicked}
                    >
                        «
                    </button>
                    <button className="join-item btn">
                        {isLoading ? <Spinner /> : "Page " + currentPage}
                    </button>
                    <button
                        className="join-item btn"
                        onClick={onNextPageClicked}
                    >
                        »
                    </button>
                </div>
                <button className="btn btn-error mx-2" onClick={clearFilter}>
                    Clear Filter
                </button>
            </div>
        );
    };

    return (
        <React.Fragment>
            {/* Property Filter */}
            <div class="mb-3">
                <Card>
                    <CardBody>
                        {renderFilter()}
                        {renderPaginator()}
                    </CardBody>
                </Card>
            </div>
        </React.Fragment>
    );
};

export default PropertyPaginator;
