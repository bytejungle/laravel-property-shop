import React from "react";

interface Props {
    text: string;
}

const BadgeOutline: React.FC<Props> = (props: Props) => {
    return <div className="badge badge-outline">{props.text}</div>;
};

export default BadgeOutline;
