import React from "react";

export interface DropSelectOption {
    title: string;
    value: any;
}

interface Props {
    title: string;
    options: Array<DropSelectOption>;
    value: any;
    handler: any;
}

const DropSelectInput: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            <div className="form-control w-full">
                <label className="label">
                    <span className="label-text">{props.title}</span>
                </label>
                <select
                    className="select select-bordered"
                    onChange={(e) => props.handler(e.target.value)}
                    value={props.value}
                >
                    {props.options.map((option, index) => {
                        return (
                            <option key={index} value={option.value}>
                                {option.title}
                            </option>
                        );
                    })}
                </select>
            </div>
        </React.Fragment>
    );
};

export default DropSelectInput;
