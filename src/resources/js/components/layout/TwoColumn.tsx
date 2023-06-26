import React from "react";

interface Column {
    title?: string;
    children: any;
}

interface Props {
    columnOne: Column;
    columnTwo: Column;
}

const TwoColumn: React.FC<Props> = (props: Props) => {
    return (
        <React.Fragment>
            {/* Two Column */}
            <div className="flex flex-col lg:flex-row px-5">
                {/* Column One */}
                <div className="grid flex-grow h-full pr-5">
                    <h1 className="text-primary text-3xl font-bold mb-2">
                        {props.columnOne.title}
                    </h1>
                    <div className="place-items-center">
                        {props.columnOne.children}
                    </div>
                </div>
                {/* Column Two */}
                <div className="grid flex-grow h-full">
                    <h1 className="text-primary text-3xl font-bold mb-2">
                        {props.columnTwo.title}
                    </h1>
                    <div className="place-items-center w-96">
                        {props.columnTwo.children}
                    </div>
                </div>
            </div>
        </React.Fragment>
    );
};

export default TwoColumn;
