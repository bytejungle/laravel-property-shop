import React from "react";
import PropertyPaginator from "./PropertyPaginator";
import { useState } from "react";
import { Country, Property, PropertyFilter } from "../networking/api";
import PropertyCard from "./PropertyCard";
import PropertyModal from "./PropertyModal";

const PropertyGrid: React.FC = () => {
    const [properties, setProperties] = useState<Array<Property>>([]);

    const [selectedProperty, setSelectedProperty] =
        useState<Property>(undefined);

    const modalId = "propertyModal";

    return (
        <React.Fragment>
            {/* Filter & Paginator */}
            <PropertyPaginator handler={setProperties} />

            {/* Information */}
            <p className="mb-2">Displaying {properties.length} results.</p>

            {/* Property Grid */}
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
            {/* Modals */}
            <PropertyModal id={modalId} property={selectedProperty} />
        </React.Fragment>
    );
};

export default PropertyGrid;
