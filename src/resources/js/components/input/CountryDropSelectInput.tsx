import React from "react";
import Api, { Property } from "../../networking/api";
import { useState, useEffect } from "react";
import DropSelectInput, { DropSelectOption } from "./DropSelectInput";

interface Props {
    title: string;
    value: Property;
    handler: any;
}

const CountryDropSelectInput: React.FC<Props> = (props: Props) => {
    const [options, setOptions] = useState<Array<DropSelectOption>>([]);

    useEffect(() => {
        Api.getCountries().then((response) => {
            if (response && response.status === Api.STATUS_OK) {
                const temporaryOptions = response.data.data.map((country) => {
                    let dropSelectOption: DropSelectOption = {
                        title: country.name,
                        value: country,
                    };
                    return dropSelectOption;
                });

                setOptions(temporaryOptions);
            }
        });
    }, []);

    return (
        <React.Fragment>
            <DropSelectInput
                title={props.title}
                options={options}
                value={props.value}
                handler={props.handler}
            />
        </React.Fragment>
    );
};

export default CountryDropSelectInput;
