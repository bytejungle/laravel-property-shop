import React from "react";
import NavigationBar from "../components/NavigationBar";
import Footer from "../components/Footer";

interface Props {
    children?: any;
}

const BasePage: React.FC<Props> = (props: Props) => {
    return(
        <React.Fragment>
            <NavigationBar />
            {props.children}
            <Footer />
        </React.Fragment>
    )
}

export default BasePage
