import React from "react";

interface Props {
    title: string;
    value: string;
    handler: any;
}

const TextInput: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Form Button */}
            <div className="form-control w-full">
                {/* Label */}
                <label className="label">
                    <span className="label-text">{props.title}</span>
                </label>
                <input
                    type="text"
                    onChange={(event) => props.handler(event.target.value)}
                    placeholder={props.title}
                    className="input input-bordered"
                    value={props.value}
                />
            </div>
        </React.Fragment>
    );
};

export default TextInput;
