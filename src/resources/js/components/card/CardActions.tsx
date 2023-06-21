import React from "react";

interface Props {
    children?: any;
}

const CardActions: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Card Actions */}
            <div className="card-actions">{props.children}</div>
        </React.Fragment>
    );
};

export default CardActions;
