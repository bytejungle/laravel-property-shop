import React from "react";

const Hero: React.FC = () => {
    return (
        <React.Fragment>
            {/* Hero */}
            <div
                className="hero h-96"
                style={{
                    backgroundImage:
                        "url(https://images.unsplash.com/photo-1499310392581-322cec0355a6)",
                }}
            >
                <div className="hero-overlay bg-opacity-50 bg-neutral"></div>
                <div className="hero-content text-center text-white">
                    <div className="max-w-md">
                        <h1 className="mb-5 text-5xl font-bold">
                            Property Shop
                        </h1>
                        <p className="mb-5 font-bold">
                            Browse the worlds largest catalogue of houses for
                            sale.
                        </p>
                    </div>
                </div>
            </div>
        </React.Fragment>
    );
};

export default Hero;
