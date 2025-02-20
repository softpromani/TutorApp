import React, { useState, useEffect } from "react";

const AnimatedSearchInput = () => {
  const subjects = ["science", "maths", "english"];
  const [subjectIndex, setSubjectIndex] = useState(0);
  const [inputValue, setInputValue] = useState("");

  useEffect(() => {
    const interval = setInterval(() => {
      setSubjectIndex((prevIndex) => (prevIndex + 1) % subjects.length);
    }, 2000);

    return () => clearInterval(interval);
  }, []);

  const handleInputChange = (e) => {
    setInputValue(e.target.value);
  };

  return (
    <div className="relative mb-10 z-10">
      <div className="absolute inset-y-0 left-3 flex items-center pointer-events-none z-10">
        <svg
          className="w-5 h-5 text-orange-500"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            strokeLinecap="round"
            strokeLinejoin="round"
            strokeWidth={2}
            d="M21 21l-4.35-4.35M17 10a7 7 0 11-14 0 7 7 0 0114 0z"
          />
        </svg>
      </div>
      <div className="relative w-full sm:w-96">
        <input
          type="text"
          value={inputValue}
          onChange={handleInputChange}
          placeholder=""
          className="w-full h-14 pl-10 pr-4 py-2 border border-orange-300 rounded-2xl text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400"
        />
        <div className="absolute inset-y-0 left-10 flex items-center pointer-events-none">
          <span className="text-[#FF8110]">Find tutors for </span>
          <span className="text-[#145DA1] ml-1 font-semibold">{subjects[subjectIndex]}</span>
        </div>
      </div>
    </div>
  );
};

export default AnimatedSearchInput;
