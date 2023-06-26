import React from "react";

interface Props {
    title?: string;
    children?: any;
}

const CardTitle: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Card Title */}
            <div className="card-title text-primary p-2 bg-base-200">
                {props.title}
                {props.children}
            </div>
        </React.Fragment>
    );
};

export default CardTitle;
