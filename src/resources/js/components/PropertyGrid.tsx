import React from "react";
import PropertyPaginator from "./PropertyPaginator";
import { useState } from "react";
import { Property } from "../networking/api";
import PropertyCard from "./PropertyCard";

const PropertyGrid: React.FC = () => {
    const [properties, setProperties] = useState<Array<Property>>([]);

    return (
        <React.Fragment>
            {/* Property Grid */}
            <div className="grid grid-cols-3 gap-5 w-full">
                {properties.map((property, index) => {
                    return <PropertyCard key={index} property={property} />;
                })}
            </div>
            <PropertyPaginator handler={setProperties} />
        </React.Fragment>
    );
};

export default PropertyGrid;
