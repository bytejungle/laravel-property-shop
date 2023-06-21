import React from "react";

interface Props {
    text: string;
}

const CardTitle: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Card Title */}
            <div className="card-title text-primary">{props.text}</div>
        </React.Fragment>
    );
};

export default CardTitle;
