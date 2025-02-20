import React from 'react'
import Button from './ui/Button'

const Blogs = () => {

    const blogs = [
        {
            title: 'Online vs. Offline Tutoring: Which is Best for You?',
            image: '/assets/img/pages/Home/image-7.png'
        },
        {
            title: "A Parent’s Guide to Supporting Your Child's Academic Journey",
            image: '/assets/img/pages/Home/image-8.png'
        },
        {
            title: "Understanding Different Learning Styles and How Tutors Can Help",
            image: '/assets/img/pages/Home/image-9.png'
        },
        {
            title: 'Why Personalized Learning Works Best for Academic Success',
            image: '/assets/img/pages/Home/image-10.png'
        }
    ]

    return (
        <div className="bg-gray-50 py-12 px-[50px]">
            <h2 className="text-center text-lg md:text-[45px] leading-[1.1] font-bold text-blue1 mb-10">
                Read Our Blogs
            </h2>

            <div className="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8">
                {blogs.map((blog, index) => (
                    <div key={index} className="">
                        <div className='h-[176px] lg:h-[196px] rounded-2xl bg-gray-200 mb-[18px] bg-cover bg-center' style={{
                            backgroundImage: `url(${blog.image})`,
                        }}>

                        </div>
                        <p className='text-base pr-10'>Online vs. Offline Tutoring: Which is Best for You?</p>
                        <a href="#" className='text-base text-[#0040E0]'>Read More</a>
                    </div>
                ))}

            </div>
            <div className='flex justify-center items-center mt-[60px] mb-[70px]'>
                <Button className='bg-transparent border border-orange-500 px-8 py-2 text-xl rounded-2xl text-orange-500 w-56 hover:bg-orange-500 hover:text-white' text='View All' onClick={() => console.log('View All')} />
            </div>
        </div>
    )
}

export default Blogs