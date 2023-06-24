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
                        value: country.id,
                    };

                    return dropSelectOption;
                });

                // create undefined option
                temporaryOptions.unshift({ title: "Any", value: -1 });

                setOptions(temporaryOptions);
            }
        });
    }, []);

    const onChange = (value: number) => {
        if (value < 0) {
            return props.handler(undefined);
        }

        props.handler(value);
    };

    const value = props.value == undefined ? -1 : props.value;

    return (
        <React.Fragment>
            <DropSelectInput
                title={props.title}
                options={options}
                value={value}
                handler={onChange}
            />
        </React.Fragment>
    );
};

export default CountryDropSelectInput;
