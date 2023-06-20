import React from "react";
import { Property } from "../networking/api";
import moment from "moment";

interface Props {
    property: Property;
}

const PropertyCard: React.FC<Props> = (props: Props) => {
    const listedAt = moment(props.property.listed_at);
    const isNew = listedAt.isSame(new Date(), "month");

    return (
        <React.Fragment>
            {/* Property Card */}
            <div className="bg-base-100 text-sm shadow">
                <figure>
                    <img
                        src={props.property.image_url}
                        alt="House"
                        className="min-vh-full"
                        height="80px"
                    />
                </figure>
                <div className="card-body">
                    <h3 className="card-title text-primary">
                        {props.property.street_address}
                    </h3>
                    <div>
                        Listed <a className="underline">{listedAt.fromNow()}</a>
                        .
                        {isNew && (
                            <div className="badge badge-outline badge-success mx-2">
                                New
                            </div>
                        )}
                    </div>
                    <p>{props.property.description}</p>
                    <div className="card-actions">
                        <div className="badge badge-outline">
                            {props.property.bedroom_count} Bedrooms
                        </div>
                        <div className="badge badge-outline">
                            {props.property.bathroom_count} Bathrooms
                        </div>
                        <div className="badge badge-outline">
                            {props.property.car_count} Car ports
                        </div>
                        <button className="btn btn-primary btn-wide w-full mt-5">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </React.Fragment>
    );
};

export default PropertyCard;
