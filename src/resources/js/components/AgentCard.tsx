import React from "react";
import Api, { Agent } from "../networking/api";
import { useState, useEffect } from "react";
import StringHelper from "../helpers/StringHelper";
import Avatar from "./Avatar";
import moment from "moment";
import BadgeOutline from "./BadgeOutline";

interface Props {
    agentId: number;
}

const AgentCard: React.FC<Props> = (props: Props) => {
    const [agent, setAgent] = useState<Agent>(undefined);

    useEffect(() => {
        Api.getAgent(props.agentId).then((response) => {
            if (response && response.status === Api.STATUS_OK) {
                setAgent(response.data.data);
            }
        });
    }, [props]);

    const lastSeenAt = agent ? moment(agent.last_seen_at) : undefined;

    return (
        <React.Fragment>
            {/* Property Card */}
            {agent && lastSeenAt && (
                <div className="bg-base-100 text-sm w-full shadow">
                    <div className="card-body">
                        <div className="flex">
                            <div className="mr-3">
                                <Avatar imageUrl={agent.image_url} size="sm" />
                            </div>
                            <div className="card-title text-primary">
                                {StringHelper.ucFirst(agent.first_name)}{" "}
                                {StringHelper.ucFirst(agent.last_name)}
                            </div>
                        </div>
                        <div className="mb-2">
                            <p>
                                {StringHelper.ucFirst(agent.first_name)} was
                                last online{" "}
                                <a className="underline">
                                    {lastSeenAt.fromNow()}
                                </a>
                                .
                            </p>
                        </div>
                        <p>Contact Information:</p>
                        <div className="card-actions">
                            <BadgeOutline text={agent.mobile_number} />
                            <BadgeOutline text={agent.email_address} />
                        </div>
                    </div>
                </div>
            )}
        </React.Fragment>
    );
};

export default AgentCard;
