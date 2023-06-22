import React from "react";
import PropertyPaginator from "./PropertyPaginator";
import { useState } from "react";
import { Country, Property } from "../networking/api";
import PropertyCard from "./PropertyCard";
import PropertyModal from "./PropertyModal";
import CountryDropSelectInput from "./input/CountryDropSelectInput";
import CardBody from "./card/CardBody";
import Card from "./card/Card";
import NumberDropSelectInput from "./input/NumberDropSelectInput";

const PropertyGrid: React.FC = () => {
    const [properties, setProperties] = useState<Array<Property>>([]);

    const [selectedProperty, setSelectedProperty] =
        useState<Property>(undefined);

    // filter state
    const [selectedCountry, setSelectedCountry] = useState<Country>(undefined);
    const [selectedBedroomCount, setSelectedBedroomCount] =
        useState<Number | undefined>(undefined);
    const [selectedBathroomCount, setSelectedBathroomCount] =
        useState<Number | undefined>(undefined);
    const [selectedCarSpaceCount, setSelectedCarSpaceCount] =
        useState<Number | undefined>(undefined);

    const modalId = "modal";

    return (
        <React.Fragment>
            {/* Property Grid */}

            {/* Property Filter */}
            <div class="mb-3">
                <Card>
                    <CardBody>
                        <div className="columns-4">
                            <CountryDropSelectInput
                                title="Filter by country"
                                value={selectedProperty}
                                handler={setSelectedCountry}
                            />
                            <NumberDropSelectInput
                                numberMin={0}
                                numberMax={5}
                                title="Filter by bedroom count"
                                value={selectedBedroomCount}
                                handler={setSelectedBedroomCount}
                            />
                            <NumberDropSelectInput
                                numberMin={0}
                                numberMax={5}
                                title="Filter by bathroom count"
                                value={selectedBathroomCount}
                                handler={setSelectedBathroomCount}
                            />
                            <NumberDropSelectInput
                                numberMin={0}
                                numberMax={5}
                                title="Filter by car space count"
                                value={selectedCarSpaceCount}
                                handler={setSelectedCarSpaceCount}
                            />
                        </div>
                    </CardBody>
                </Card>
            </div>
            <div className="grid grid-cols-3 gap-5 w-full">
                {properties.map((property, index) => {
                    return (
                        <PropertyCard
                            key={index}
                            property={property}
                            handler={setSelectedProperty}
                        />
                    );
                })}
            </div>
            <PropertyPaginator handler={setProperties} />

            {/* Modals */}
            <PropertyModal id={modalId} property={selectedProperty} />
        </React.Fragment>
    );
};

export default PropertyGrid;
