import React from "react";

interface Props {
    id: string;
    title: string;
    children?: any;
}

const Modal: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Property Modal */}
            <dialog id={props.id} className="modal">
                <form method="dialog" className="modal-box">
                    {/* Modal Title */}
                    <h3 className="font-bold text-lg text-primary">
                        {props.title}
                    </h3>
                    {/* Modal Body */}
                    {props.children}
                    <div className="modal-action">
                        {/* Close Button */}
                        <button className="btn">Close</button>
                    </div>
                </form>
            </dialog>
        </React.Fragment>
    );
};

export default Modal;
