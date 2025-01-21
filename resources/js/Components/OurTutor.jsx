import React from 'react'
import OurCard from './OurCard'
import Button from './ui/Button';

const OurTutor = () => {
    const tutors = [
        {
            name: "John Doe",
            img: "/assets/img/avatars/1.png",
            address: "Hyderabad, India",
            subject: ["Mathematics", "CBSE"],
            experience: "6 Years of experience in teaching mathematics",
            description:
                "“I firmly believe that everyone has the potential to learn, especially with the right guidance and effort. With my extensive teaching experience, I am dedicated to helping students unlock that potential and achieve their goals”",
        },
        {
            name: "Kathrine",
            img: "/assets/img/avatars/2.png",
            address: "Hyderabad, India",
            subject: ["Mathematics", "ISCE"],
            experience: "6 Years of experience in teaching mathematics",
            description:
                "“I firmly believe that everyone has the potential to learn, especially with the right guidance and effort. With my extensive teaching experience, I am dedicated to helping students unlock that potential and achieve their goals”",
        },
        {
            name: "Williams",
            img: "/assets/img/avatars/3.png",
            address: "Hyderabad, India",
            subject: ["Mathematics", "NIOS"],
            experience: "6 Years of experience in teaching mathematics",
            description:
                "“I firmly believe that everyone has the potential to learn, especially with the right guidance and effort. With my extensive teaching experience, I am dedicated to helping students unlock that potential and achieve their goals”",
        },
        {
            name: "Sophia Brown",
            img: "/assets/img/avatars/4.png",
            address: "Bangalore, India",
            subject: ["Physics", "CBSE"],
            experience: "8 Years of experience in teaching physics",
            description:
                "“Physics is all about understanding the universe. I strive to make it enjoyable and easy for students with my teaching methods.”",
        },
        {
            name: "Michael Green",
            img: "/assets/img/avatars/5.png",
            address: "Mumbai, India",
            subject: ["Chemistry", "ISCE"],
            experience: "7 Years of experience in teaching chemistry",
            description:
                "“I believe that every student can excel in chemistry with the right guidance and hands-on learning.”",
        },
        {
            name: "Emma Watson",
            img: "/assets/img/avatars/6.png",
            address: "Delhi, India",
            subject: ["Biology", "NIOS"],
            experience: "10 Years of experience in teaching biology",
            description:
                "“Biology is a fascinating subject, and my goal is to help students appreciate the beauty of life sciences.”",
        },
    ];


    return (
        <div className="bg-gray-50 py-12 px-[50px]">
            <h3 className="text-center text-lg md:text-[45px] leading-[1.1] font-bold text-blue1 mb-10">
                Our Tutors
            </h3>
            <div className="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                {tutors.map((tutor, index) => (
                    <OurCard key={index} tutor={tutor} />
                ))}
            </div>

            <div className='flex justify-center items-center mt-[60px] mb-[90px]'>
                <Button className='bg-transparent border border-orange-500 px-8 py-2 text-xl rounded-2xl text-orange-500 w-56 hover:bg-orange-500 hover:text-white' text='View More' onClick={() => console.log('View More')} />
            </div>

            <div className="bg-[#B8B8B8] h-[1px] w-full mb-7"/>
        </div>
    )
}

export default OurTutor