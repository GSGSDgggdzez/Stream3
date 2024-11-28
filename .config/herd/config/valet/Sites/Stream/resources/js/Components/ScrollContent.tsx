import React, { useRef, useEffect, useState } from 'react';

interface ScrollContentProps {
  title: string;
  sub_title: string;
  items: any[];
  renderItem: (item: any) => React.ReactNode;
}

const ScrollContent = ({ title, sub_title, items, renderItem }: ScrollContentProps) => {
  const scrollContainerRef = useRef<HTMLDivElement | null>(null);
  const [isScrolling, setIsScrolling] = useState<boolean>(false);

  // Scroll logic to move left or right
  const scroll = (direction: 'left' | 'right') => {
    const container = scrollContainerRef.current;
    if (!container) return;

    const scrollAmount = container.clientWidth * 0.8;
    const newScrollPosition = container.scrollLeft + (direction === 'left' ? -scrollAmount : scrollAmount);
    container.scrollTo({
      left: newScrollPosition,
      behavior: 'smooth',
    });
  };

  // Auto-scroll and loop content
  const startAutoScroll = () => {
    if (!scrollContainerRef.current) return;

    const container = scrollContainerRef.current;
    const scrollAmount = container.clientWidth * 0.8;

    setInterval(() => {
      if (!container) return;

      if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
        // Looping: Reset scroll to the beginning
        container.scrollLeft = 0;
      } else {
        // Scroll right smoothly
        container.scrollLeft += scrollAmount;
      }
    }, 10000); // Scroll every 3 seconds
  };

  // Automatically start scrolling on component mount
  useEffect(() => {
    startAutoScroll();
  }, []);

  return (
    <div className="w-full px-6 py-4">
      <div className="flex flex-col mb-6">
        <div className="flex flex-col md:flex-row items-center md:items-start md:justify-between">
          <div className="text-center md:text-left mb-4 md:mb-0">
            <h2 className="text-4xl font-bold text-[#FFFFFF]">{title}</h2>
            <p className="text-sm text-[#999999] mt-1">{sub_title}</p>
          </div>
          <div className="flex gap-2 bg-[#0F0F0F] p-2 rounded-lg">
            <button
              onClick={() => scroll('left')}
              className="px-4 py-2 bg-black/70 hover:bg-black/90 text-white rounded-md transition-colors"
            >
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
              </svg>

            </button>
            <button
              onClick={() => scroll('right')}
              className="px-4 py-2 bg-black/70 hover:bg-black/90 text-white rounded-md transition-colors"
            >
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <div
        ref={scrollContainerRef}
        className="flex gap-5 overflow-x-auto scroll-smooth hide-scrollbar"
      >
        {/* Duplicate the items to create the looping effect */}
        {items.concat(items).map((item, index) => (
          <div key={index} className="flex-none">
            {renderItem(item)}
          </div>
        ))}
      </div>
    </div>
  );
};

export default ScrollContent;
