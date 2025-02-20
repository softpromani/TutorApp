import React from 'react'

const Footer = () => {
    const columns = [
        {
          title: 'Home',
          links: [
            { name: 'About Us', href: '#' },
            { name: 'Blogs', href: '#' },
            { name: 'FAQ', href: '#' },
          ],
        },
        {
          title: 'Tutor',
          links: [
            { name: 'Find a Tutor', href: '#' },
            { name: 'Become a Tutor', href: '#' },
          ],
        },
        {
          title: 'Help',
          links: [
            { name: 'Customer Support', href: '#' },
            { name: 'How It Works', href: '#' },
          ],
        },
        {
          title: 'Privacy Policy',
          links: [
            { name: 'Terms of Service', href: '#' },
            { name: 'Privacy Policy', href: '#' },
          ],
        },
        {
          title: 'Contact Us',
          links: [
            { name: 'help@Gurudhoondo.com +(001) 917-946-7961  14/1 NH19, Pocket B,Sector 27 Faridabad, Haryana 121003', href: '#' },
          ],
        },
      ];

  return (
    <footer className="bg-[#101A23] text-white relative" style={{ paddingLeft: '50px', paddingTop: '109px' }}>
    <div className="max-w-full px-4 pb-6 pt-16 sm:px-6 lg:px-8">
      <div className="grid grid-cols-1 gap-8 lg:grid-cols-6">
        <div className="lg:col-span-1">
          <div className="flex justify-center text-white sm:justify-start">
          <img src="/assets/img/logo.png" alt="Logo" className="w-[216px] h-[42px]" />
          </div>
          <p className="mt-6 max-w-md text-center leading-relaxed text-white sm:max-w-xs sm:text-left">
          Connect with GuruDhoondo to access a diverse pool of tutors.
          </p>
        </div>

        {columns.map((column, index) => (
          <div key={index} className="text-center sm:text-left">
            <p className="text-lg font-medium text-white">{column.title}</p>
            <ul className="mt-8 space-y-4 text-sm">
              {column.links.map((link, linkIndex) => (
                <li key={linkIndex}>
                  <a
                    className="text-white transition hover:text-orange-500"
                    href={link.href}
                  >
                    {link.name}
                  </a>
                </li>
              ))}
            </ul>
          </div>
        ))}
      </div>

      <div className="mt-12 border-t border-gray-100 pt-6 flex justify-center">
        <div className="text-center sm:flex sm:justify-between sm:text-left">
          {/* <p className="text-sm text-gray-500">
            <span className="block sm:inline">All rights reserved.</span>
            <a className="inline-block text-teal-600 underline transition hover:text-teal-600/75" href="#">
              Terms & Conditions
            </a>
            <span>&middot;</span>
            <a className="inline-block text-teal-600 underline transition hover:text-teal-600/75" href="#">
              Privacy Policy
            </a>
          </p> */}
          <p className="mt-4 text-sm text-white sm:order-first sm:mt-0">&copy; Copyright 2025, All Rights Reserved by Gurudhoondo</p>
        </div>
      </div>
    </div>
  </footer>
  )
}

export default Footer