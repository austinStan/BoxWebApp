import React from "react";
import Layout from './Layout'



const Index = ({fname,lname}) => {
    return (
        <>
        {/* <Header />
       <div>IM A BODY</div> 
        <Footer /> */}
        {fname} {lname}
        </>
    );
}
Index.layout = page => (
    <Layout children={page} title="Index | Box Online Shopping" />
);

export default Index;