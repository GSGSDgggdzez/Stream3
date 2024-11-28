import React from 'react'
import { Link } from '@inertiajs/react'

interface RandomProps {
    title: string;
    description: string;
    thumbnailUrl: string;
  }
  
  function Random({ title, description, thumbnailUrl }: RandomProps) {
    return (
      <div
        className="flex justify-center items-center absolute top-[430px] left-0 right-0"
        style={{
          background: "linear-gradient(0deg, rgba(1,1,1,1) 59%, rgba(164,66,66,0) 100%)"
        }}
      >
        <div className="text-center">
          <div className="text-white font-bold my-4 text-4xl">
            {title}
          </div>
          <div className="text-sm mx-8 text-[#999999]">
            {description}
          </div>
          <img src={thumbnailUrl} alt={title} className="w-full rounded-lg mt-4" />
        </div>
      </div>
    )
  }
  

export default Random
