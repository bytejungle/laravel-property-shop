import React from "react";

interface Props {
    children?: any;
}

const CardBody: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Card Body */}
            <div className="card-body">{props.children}</div>
        </React.Fragment>
    );
};

export default CardBody;
