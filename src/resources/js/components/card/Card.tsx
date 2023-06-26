import React from "react";

interface Props {
    children?: any;
}

const Card: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Card */}
            <div className="bg-base-100 text-sm w-full shadow border">
                {props.children}
            </div>
        </React.Fragment>
    );
};

export default Card;
