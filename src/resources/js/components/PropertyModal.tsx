import React from "react";
import { Property } from "../networking/api";
import AgentCard from "./AgentCard";

interface Props {
    id: string;
    property: Property;
}

const PropertyModal: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Property Modal */}
            <dialog id={props.id} className="modal">
                <form method="dialog" className="modal-box">
                    <h3 className="font-bold text-lg text-primary">
                        {props.property.street_address}
                    </h3>
                    <p className="py-4">{props.property.description}</p>
                    <AgentCard agentId={props.property.agent_id} />
                    <div className="modal-action">
                        {/* Close Button */}
                        <button className="btn">Close</button>
                    </div>
                </form>
            </dialog>
        </React.Fragment>
    );
};

export default PropertyModal;
