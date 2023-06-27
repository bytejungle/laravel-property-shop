import React from "react";

interface Props {
    imageUrl: string;
    size: "sm" | "md" | "lg";
}

const Avatar: React.FC<Props> = (props: Props) => {
    let sizeClass = "";
    switch (props.size) {
        case "sm":
            sizeClass = "w-8";
            break;
        case "md":
            sizeClass = "w-16";
            break;
        case "lg":
            sizeClass = "w-32";
            break;
    }

    return (
        <React.Fragment>
            {/* Avatar */}
            <div className="avatar">
                <div className={`${sizeClass} rounded-xl`}>
                    <img src={props.imageUrl} />
                </div>
            </div>
        </React.Fragment>
    );
};

export default Avatar;
