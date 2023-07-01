import React from "react";

interface Props {
    href: string;
    children?: any;
}

const Link: React.FC<Props> = (props: Props) => {
    return (
        <a target="_blank" href={props.href}>
            {props.children}
        </a>
    );
};

export default Link;
