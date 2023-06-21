import React from "react";
import { useState, useEffect } from "react";
import Api, { RequestOptions } from "../networking/api";
import { toast } from "react-toastify";

interface Props {
    handler: any;
}

const PropertyPaginator: React.FC<Props> = (props: Props) => {
    const [currentPage, setCurrentPage] = useState<number>(1);

    useEffect(() => {
        const requestOptions: RequestOptions = { page: currentPage };

        Api.getProperties(requestOptions).then((response) => {
            toast.info("Loading properties...");
            if (response && response.status === Api.STATUS_OK) {
                props.handler(response.data.data);
            }
        });
    }, [currentPage]);

    const onPreviousPageClicked = () => {
        if (currentPage === 1) return;
        setCurrentPage(currentPage - 1);
    };

    const onNextPageClicked = () => {
        setCurrentPage(currentPage + 1);
    };

    return (
        <React.Fragment>
            {/* Property Paginator*/}
            <div className="w-full flex justify-center py-5">
                <div className="join">
                    <button
                        className="join-item btn"
                        onClick={onPreviousPageClicked}
                    >
                        «
                    </button>
                    <button className="join-item btn">
                        Page {currentPage}
                    </button>
                    <button
                        className="join-item btn"
                        onClick={onNextPageClicked}
                    >
                        »
                    </button>
                </div>
            </div>
        </React.Fragment>
    );
};

export default PropertyPaginator;
