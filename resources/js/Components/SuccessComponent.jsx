import React from "react";
import SuccessCard from "./SuccessCard";

const SuccessComponent = () => {

    const success = [
        {
            id: '1',
            img: '/assets/img/pages/magnifying-glass.png',
            title: 'Find Instructor',
            description: 'Search instructor based on your time availability and details.',
            count: '1'
        },
        {
            id: '2',
            img: '/assets/img/pages/calendar.png',
            title: 'Book Instructor',
            description: 'Experience the convenience of finding the right mentor for your academic skill development.',
            count: '2'
        },
        {
            id: '3',
            img: '/assets/img/pages/rocket.png',
            title: 'Start Learning',
            description: 'Search instructor based on your time availability and details.',
            count: '3'
        }
        
    ]

  return (
    <div className="bg-gray-50 py-12 md:px-[202px]">
      <h2 className="text-center text-xl text-semiBlack mb-6">
        Navigating Success Together
      </h2>
      <div className="lg:w-[634px] text-center mx-auto mb-16">
      <h3 className="text-center text-lg md:text-[45px] leading-[1.1] font-bold text-blue1 mb-10">
        Unlocking Learning Journeys, One Step at a Time
      </h3>

      </div>
      <div className="mx-auto flex flex-col md:flex-row justify-center items-center gap-8">
        {success.map((item) => (
            <SuccessCard key={item.id} img={item.img} title={item.title} description={item.description} count={item.count} />
        ))}
      </div>
    </div>
  );
};

export default SuccessComponent;
