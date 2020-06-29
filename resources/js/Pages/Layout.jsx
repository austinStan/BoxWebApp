import React, { useEffect } from 'react'
//import { InertiaLink } from '@inertiajs/inertia-react'
import "@fortawesome/fontawesome-free/css/all.min.css";
import "bootstrap-css-only/css/bootstrap.min.css";
import "mdbreact/dist/css/mdb.css";
import Header from '../components/Navigation/Header'
import Footer from '../components/Navigation/Footer'

export default function Layout({ title, children }) {
  useEffect(() => {
    document.title = title;
  }, [title])

  return (
    // <main>
    //   <header>
    //     <InertiaLink href="/">Home</InertiaLink>
    //     <InertiaLink href="/about">About</InertiaLink>
    //     <InertiaLink href="/contact">Contact</InertiaLink>
    //   </header>

    //   <article>{children}</article>
    // </main>
         <>
        <Header/>
       <div>{children}</div>
        <Footer/>
         </>
  )
}