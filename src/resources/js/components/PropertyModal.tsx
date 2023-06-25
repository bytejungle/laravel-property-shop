import React from "react";
import { Property } from "../networking/api";
import AgentCard from "./AgentCard";
import Modal from "./Modal";

interface Props {
    id: string;
    property: Property;
}

const PropertyModal: React.FC<Props> = (props: Props) => {
    const title = props.property ? props.property.street_address : "";

    return (
        <React.Fragment>
            {/* Property Modal */}
            <Modal id={props.id} title={title}>
                {props.property && (
                    <React.Fragment>
                        <p className="py-4">{props.property.description}</p>
                        <AgentCard agentId={props.property.agent_id} />
                    </React.Fragment>
                )}
            </Modal>
        </React.Fragment>
    );
};

export default PropertyModal;
