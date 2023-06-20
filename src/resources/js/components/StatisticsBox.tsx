import React from "react";

interface Props {
    title: string;
    value: string;
}

const StatisticsBox: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Statistics Box */}
            <div className="stat">
                    <div className="stat-title text-neutral">{props.title}</div>
                    <div className="stat-value text-primary">{props.value}</div>
                </div>
        </React.Fragment>
    );
};

export default StatisticsBox;
