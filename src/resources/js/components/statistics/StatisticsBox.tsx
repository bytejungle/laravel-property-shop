import React from "react";
import Spinner from "../Spinner";
import CardBody from "../card/CardBody";
import Card from "../card/Card";
import CardTitle from "../card/CardTitle";

interface Props {
    title: string;
    value: string;
    isLoading?: boolean;
}

const StatisticsBox: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Statistics Box */}
            <Card>
                <CardTitle title={props.title} />
                <CardBody>
                    <div className="stat-value text-black">
                        {props.isLoading ? <Spinner /> : props.value}
                    </div>
                </CardBody>
            </Card>
        </React.Fragment>
    );
};

export default StatisticsBox;
