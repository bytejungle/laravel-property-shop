import React from "react";
import Api, { Agent } from "../networking/api";
import { useState, useEffect } from "react";
import StringHelper from "../helpers/StringHelper";
import Avatar from "./Avatar";
import moment from "moment";
import BadgeOutline from "./BadgeOutline";
import Spinner from "./Spinner";
import Card from "./card/Card";
import CardBody from "./card/CardBody";
import CardActions from "./card/CardActions";
import CardTitle from "./card/CardTitle";

interface Props {
    agentId: number;
}

const AgentCard: React.FC<Props> = (props: Props) => {
    const [agent, setAgent] = useState<Agent>(undefined);
    const [isLoading, setIsLoading] = useState<Boolean>(false);

    useEffect(() => {
        setIsLoading(true);
        Api.getAgent(props.agentId)
            .then((response) => {
                if (response && response.status === Api.STATUS_OK) {
                    setAgent(response.data.data);
                }
            })
            .finally(setIsLoading(false));
    }, [props]);

    const lastSeenAt = agent ? moment(agent.last_seen_at) : undefined;

    // if the spinner should be displayed
    const shouldDisplaySpinner = !agent || !lastSeenAt || isLoading;

    if (shouldDisplaySpinner) return <Spinner />;

    const formattedName =
        StringHelper.ucFirst(agent.first_name) +
        " " +
        StringHelper.ucFirst(agent.last_name);

    return (
        <React.Fragment>
            {/* Agent Card */}
            <Card>
                <CardBody>
                    <div className="flex">
                        <div className="mr-3">
                            <Avatar imageUrl={agent.image_url} size="sm" />
                        </div>
                        <CardTitle text={formattedName} />
                    </div>
                    <div className="mb-2">
                        <p>
                            {StringHelper.ucFirst(agent.first_name)} was last
                            online{" "}
                            <a className="underline">{lastSeenAt.fromNow()}</a>.
                        </p>
                    </div>
                    <p>Contact Information:</p>
                    <CardActions>
                        <BadgeOutline text={agent.mobile_number} />
                        <BadgeOutline text={agent.email_address} />
                    </CardActions>
                </CardBody>
            </Card>
        </React.Fragment>
    );
};

export default AgentCard;
