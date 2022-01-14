import React, { Fragment, useEffect, useState } from 'react';
import { Disclosure } from '@headlessui/react'
import { MenuIcon, XIcon } from '@heroicons/react/outline'

function classNames(...classes) {
    return classes.filter(Boolean).join(' ')
}

function Nav() {

    const [menu, setMenu] = useState([]);
    const [scroll, setScroll] = useState(false);

    useEffect(() => {
        window.addEventListener("scroll", () => {
            setScroll(window.scrollY > 50);
        });
    }, []);

    useEffect(() => {
        async function loadMenu() {
            const response = await fetch('/wp-json/wp/v2/menu');

            if(!response.ok) {
                return;
            }
    
            const menu = await response.json();
            setMenu(menu);
        }
    
        loadMenu();
   }, [])

    return (
        <Disclosure as="nav" className={`fixed w-full ${scroll ? "bg-gray-800" : ""}`}>
            {({ open }) => (
                <>
                    <div className="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                        <div className="relative flex items-center justify-between h-16">
                            <div className="absolute inset-y-0 left-0 flex items-center sm:hidden">
                                {/* Mobile menu button*/}
                                <Disclosure.Button className="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                                    <span className="sr-only">Open main menu</span>
                                    
                                        <MenuIcon className="block h-6 w-6" aria-hidden="true" />

                                </Disclosure.Button>
                            </div>
                            <div className="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                                <div className="flex-shrink-0 flex items-center">
                                    <img
                                        className="block w-auto h-12"
                                        src="https://matthewgibson.co.uk/media/logo-small-square.jpg"
                                        alt="Matthew Gibson"
                                    />
                                </div>
                                <div className="hidden sm:block sm:ml-6 lg:pt-1">
                                    <div className="flex space-x-4">
                                        {menu.map((item) => (
                                        <a
                                            key={item.title}
                                            href={item.url}
                                            className='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer'                                        
                                        >
                                            {item.title}
                                        </a>
                                        ))}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <Disclosure.Panel className="sm:hidden h-screen bg-gray-800 absolute top-0 w-full z-50">
                        <Disclosure.Button className="inline-flex items-center justify-center p-2 rounded-md float-right text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span className="sr-only">Close main menu</span>
                            <XIcon className="block h-6 w-6" aria-hidden="true" />
                        </Disclosure.Button>
                        <div className="px-2 pt-2 pb-3 space-y-1 flex flex-col pt-8">
                        {menu.map((item) => (
                            <Disclosure.Button
                                key={item.title}
                                as="a"
                                href={item.url}
                                className='text-gray-300 hover:bg-gray-700 hover:text-white px-1 py-4 rounded-md text-xl font-medium cursor-pointer'                                        
                                >
                                {item.title}
                            </Disclosure.Button>
                        ))}
                        </div>
                    </Disclosure.Panel>
                </>
            )}
        </Disclosure>
    );
}

export default Nav;
