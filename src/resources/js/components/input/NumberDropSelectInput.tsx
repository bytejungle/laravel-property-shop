import React from "react";
import DropSelectInput, { DropSelectOption } from "./DropSelectInput";

interface Props {
    numberMin: number;
    numberMax: number;
    title: string;
    value: any;
    handler: any;
}

const NumberDropSelectInput: React.FC<Props> = (props: Props) => {
    const onChange = (value: number) => {
        if (value < 0) {
            return props.handler(undefined);
        }

        props.handler(value);
    };

    const value = props.value == undefined ? -1 : props.value;

    const options: Array<DropSelectOption> = [];

    // create undefined option
    options.push({ title: "Any", value: -1 });
    // create options
    for (let i = props.numberMin; i <= props.numberMax; i++) {
        options.push({ title: String(i), value: i });
    }

    return (
        <DropSelectInput
            title={props.title}
            options={options}
            value={value}
            handler={onChange}
        />
    );
};

export default NumberDropSelectInput;
