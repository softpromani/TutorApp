import React, { useState, useEffect } from "react";

const StudentThoughts = () => {
    const testimonials = [
        {
            id: 1,
            message:
                "I am incredibly grateful for GuruDhoondo! The platform made finding the perfect tutor a breeze. The personalized matching system ensured I connected with a tutor who not only excelled in the subject but also understood my learning style.",
            image: "/assets/img/pages/Home/image-6.png",
        },
        {
            id: 2,
            message:
                "GuruDhoondo has been a game-changer for my studies. The tutors are amazing, and the platform is so user-friendly!",
            image: "/assets/img/pages/Home/image-3.png",
        },
        {
            id: 3,
            message:
                "Thanks to GuruDhoondo, I found the perfect mentor who guided me through my toughest subjects!",
            image: "/assets/img/pages/Home/image-4.png",
        },
        {
            id: 4,
            message:
                "Thanks to GuruDhoondo, I found the perfect mentor who guided me through my toughest subjects!",
            image: "/assets/img/pages/Home/image-2.png",
        },
        {
            id: 5,
            message:
                "Thanks to GuruDhoondo, I found the perfect mentor who guided me through my toughest subjects!",
            image: "/assets/img/pages/Home/image-1.png",
        },
    ];

    const [currentIndex, setCurrentIndex] = useState(0);

    useEffect(() => {
        const interval = setInterval(() => {
            setCurrentIndex((prevIndex) =>
                prevIndex === testimonials.length - 1 ? 0 : prevIndex + 1
            );
        }, 3000); // Auto-navigate every 3 seconds
        return () => clearInterval(interval); // Clear interval on component unmount
    }, [testimonials.length]);

    return (
        <div className="bg-gray-50 mb-[70px]">
            <h2 className="text-center text-lg md:text-[45px] leading-[1.1] font-bold text-blue1 mb-10">
                What Our Students Say
            </h2>
            <div className="relative max-w-xl mx-auto">
                {/* Testimonial Slide */}
                <div className="text-center">
                    <img
                        src={testimonials[currentIndex].image}
                        alt="Student"
                        className="rounded-full w-24 h-24 mx-auto mb-4"
                    />
                    <div className="relative">
                        <div className="absolute flex flex-row gap-2 -top-14 -left-24 z-10">
                            <svg width={38} height={62} viewBox="0 0 38 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fillRule="evenodd" clipRule="evenodd" d="M8.50984 27.3095C8.91874 23.4999 10.021 20.4594 11.9435 17.7679C14.5165 14.166 18.8274 10.8076 25.9678 7.23721C27.7909 6.32591 28.5299 4.10916 27.6181 2.28606C26.7068 0.462971 24.4901 -0.276104 22.667 0.635689C15.0454 4.44623 9.51512 8.46884 5.93733 13.478C2.29212 18.5812 0.944363 24.3221 0.944363 30.9999V53.1428C0.944363 57.8985 4.79968 61.7539 9.55547 61.7539H29.238C33.9938 61.7539 37.8491 57.8985 37.8491 53.1428V35.9206C37.8491 31.1648 33.9938 27.3095 29.238 27.3095H8.50984Z" fill="#145DA1" />
                            </svg>
                            <svg width={38} height={62} viewBox="0 0 38 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fillRule="evenodd" clipRule="evenodd" d="M8.50984 27.3095C8.91874 23.4999 10.021 20.4594 11.9435 17.7679C14.5165 14.166 18.8274 10.8076 25.9678 7.23721C27.7909 6.32591 28.5299 4.10916 27.6181 2.28606C26.7068 0.462971 24.4901 -0.276104 22.667 0.635689C15.0454 4.44623 9.51512 8.46884 5.93733 13.478C2.29212 18.5812 0.944363 24.3221 0.944363 30.9999V53.1428C0.944363 57.8985 4.79968 61.7539 9.55547 61.7539H29.238C33.9938 61.7539 37.8491 57.8985 37.8491 53.1428V35.9206C37.8491 31.1648 33.9938 27.3095 29.238 27.3095H8.50984Z" fill="#145DA1" />
                            </svg>


                        </div>
                        <p className="text-lg text-gray-800 px-4">
                            {testimonials[currentIndex].message}
                        </p>
                        <div className="absolute flex flex-row gap-2 -bottom-14 -right-24 z-10">

                            <svg width={38} height={62} viewBox="0 0 38 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fillRule="evenodd" clipRule="evenodd" d="M30.2839 34.6905C29.8749 38.5001 28.7725 41.5406 26.85 44.2321C24.2771 47.834 19.9661 51.1924 12.8257 54.7628C11.0027 55.6741 10.2637 57.8908 11.1752 59.7139C12.0867 61.537 14.3035 62.2761 16.1265 61.3643C23.748 57.5538 29.2783 53.5312 32.8561 48.522C36.5013 43.4188 37.8491 37.6779 37.8491 31.0001V8.85721C37.8491 4.10146 33.9937 0.246094 29.238 0.246094H9.55545C4.7997 0.246094 0.944336 4.10146 0.944336 8.85721V26.0794C0.944336 30.8352 4.79975 34.6905 9.55545 34.6905H30.2839Z" fill="#145DA1" />
                            </svg>
                            <svg width={38} height={62} viewBox="0 0 38 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fillRule="evenodd" clipRule="evenodd" d="M30.2839 34.6905C29.8749 38.5001 28.7725 41.5406 26.85 44.2321C24.2771 47.834 19.9661 51.1924 12.8257 54.7628C11.0027 55.6741 10.2637 57.8908 11.1752 59.7139C12.0867 61.537 14.3035 62.2761 16.1265 61.3643C23.748 57.5538 29.2783 53.5312 32.8561 48.522C36.5013 43.4188 37.8491 37.6779 37.8491 31.0001V8.85721C37.8491 4.10146 33.9937 0.246094 29.238 0.246094H9.55545C4.7997 0.246094 0.944336 4.10146 0.944336 8.85721V26.0794C0.944336 30.8352 4.79975 34.6905 9.55545 34.6905H30.2839Z" fill="#145DA1" />
                            </svg>
                        </div>




                    </div>
                </div>

                {/* Navigation Dots */}
                <div className="flex justify-center mt-6 space-x-2">
                    {testimonials.map((_, index) => (
                        <button
                            key={index}
                            onClick={() => setCurrentIndex(index)}
                            className={`w-14 h-1 rounded-full ${index === currentIndex
                                    ? "bg-orange-500"
                                    : "bg-gray-300 hover:bg-gray-400"
                                }`}
                        ></button>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default StudentThoughts;
