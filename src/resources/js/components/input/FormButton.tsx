import React from "react";

interface Props {
    title: string;
    buttonText: string;
    handler: any;
}

const FormButton: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Form Button */}
            <div className="form-control w-full max-w-xs">
                {/* Label */}
                <label className="label">
                    <span className="label-text">{props.title}</span>
                </label>
                <button className="btn" onClick={props.handler}>
                    {props.buttonText}
                </button>
            </div>
        </React.Fragment>
    );
};

export default FormButton;
