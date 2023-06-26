import React from "react";

interface Props {
    countryCode: string;
}

const CountryFlag: React.FC<Props> = (props: Props) => {
    const url = `https://flagsapi.com/${props.countryCode}/shiny/64.png`;

    return (
        <React.Fragment>
            {/* Country Flag */}
            <div className="avatar">
                <div className="w-8 rounded">
                    <img src={url} alt="Country Flag" />
                </div>
            </div>
        </React.Fragment>
    );
};

export default CountryFlag;
