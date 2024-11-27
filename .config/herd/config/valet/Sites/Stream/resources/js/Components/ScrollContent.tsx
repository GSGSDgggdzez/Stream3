import React, { useRef, useEffect, useState } from 'react';

interface ScrollContentProps {
  title: string;
  sub_title: string;
  items: any[];
  renderItem: (item: any) => React.ReactNode;
}


const ScrollContent = ({ title,sub_title, items, renderItem }: ScrollContentProps) => {
  const scrollContainerRef = useRef<HTMLDivElement | null>(null);

  const scroll = (direction: 'left' | 'right') => {
    const container = scrollContainerRef.current;
    if (!container) return;
    const scrollAmount = 3000;
    const newScrollPosition = container.scrollLeft + (direction === 'left' ? -scrollAmount : scrollAmount);
    container.scrollTo({
      left: newScrollPosition,
      behavior: 'smooth'
    });
  };

  return (
    <div className="w-full px-6 py-4">
    <div className="flex flex-col mb-6">
      <div className="flex flex-col md:flex-row items-center md:items-start md:justify-between">
        <div className='text-center md:text-left mb-4 md:mb-0'>
          <h2 className="text-4xl font-bold text-[#FFFFFF] ">{title}</h2>
          <p className="text-sm text-[#999999] mt-1">{sub_title}</p>
        </div>
        <div className="flex gap-2">
          <button
            onClick={() => scroll('left')}
            className="px-4 py-2 bg-black/70 hover:bg-black/90 text-white rounded-md transition-colors"
          >
            ←
          </button>
          <button
            onClick={() => scroll('right')}
            className="px-4 py-2 bg-black/70 hover:bg-black/90 text-white rounded-md transition-colors"
          >
            →
          </button>
        </div>
      </div>
    </div>
    
    <div
      ref={scrollContainerRef}
      className="flex gap-5 overflow-x-hidden scroll-smooth"
    >
      {items.map((item, index) => (
        <div key={index} className="flex-none">
          {renderItem(item)}
        </div>
      ))}
    </div>
  </div>
  
  );
};



export default ScrollContent;
