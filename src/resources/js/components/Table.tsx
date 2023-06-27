import React from "react";

interface Props {
    headerRow: any;
    bodyRows: any;
}

const Table: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Table */}
            <div className="w-full overflow-x-auto">
                <table className="table">
                    {/* Header */}
                    <thead>{props.headerRow}</thead>
                    {/* Body */}
                    <tbody>{props.bodyRows}</tbody>
                </table>
            </div>
        </React.Fragment>
    );
};

export default Table;
