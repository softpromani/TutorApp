import React from 'react';

const FindCard = ({card}) => {
  return (
    <div className={`w-[294px] lg:h-[360px] h-32 rounded-3xl ${card?.color} text-white flex flex-col py-6 px-8`}>
      <div className="w-[76px] h-[60px] rounded-md mb-[26px]">
        <img
          className="rounded-md"
          src={card.img}
          alt={card.img}
        />
      </div>
      <h2 className="text-[25px] leading-6 font-bold mb-[14px]">
        {card.title}
      </h2>
      <p className=" text-base leading-6 max-w-44">
        {card.description}
      </p>
    </div>
  );
};

export default FindCard;
