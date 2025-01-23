import React from 'react'
import Find from './Find'
import FindCards from './FindCards'

const FindTutors = () => {
  return (
    <div className="bg-gray-50 py-12 px-[50px] w-full flex flex-col gap-10 items-center justify-center">
        <Find />
        <FindCards />
    </div>
  )
}

export default FindTutors