import { usePage } from '@inertiajs/react';
import { Page } from '@inertiajs/core';
import MainLayout from '@/Layouts/MainLayout';
import Navbar from '@/Components/Navbar';
import ScrollContent from '@/Components/ScrollContent';
import DeviceSection from '@/Components/DeviceSection';
import Footer from '@/Components/Footer';
import FAQ from '@/Components/FAQ';
import CTA from '@/Components/CTA';

// Movie interface
interface Movie {
  Small_Thumbnail_Url: string;
  Title: string;
}

// Correct type for PageProps
type PageProps = {
  auth: {
    user: any;
  };
  moviesByGenre: { [key: string]: Movie[] };
};

// Define the component
export default function Welcome() {
  const { auth, moviesByGenre = {} } = usePage<PageProps>().props;

  return (
    <MainLayout>
      <section className="relative mb-[70px] bg-[rgba(1,1,1)]">
        {/* Hero image for large screens */}
        <img src="/build/iii/Bro.svg" alt="" className="hidden md:block w-full" />

        {/* Hero image for small screens */}
        <img src="/build/iii/Sub.svg" alt="" className="md:hidden w-full" />

        {/* Navigation bar */}
        <div className="absolute top-0 left-0 right-0 mx-12 my-8">
          <Navbar />
        </div>

        {/* Hero content */}
        <div
          className="flex justify-center items-center absolute top-[430px] left-0 right-0"
          style={{
            background: "linear-gradient(0deg, rgba(1,1,1,1) 59%, rgba(164,66,66,0) 100%)"
          }}
        >
          <div className="text-center">
            <div className="text-white font-bold my-4 text-4xl">
              The Best Streaming Experience
            </div>

            {/* Description for large screens */}
            <div className="hidden md:block text-sm mx-8 text-[#999999]">
              StreamVibe is the best streaming experience for watching your favorite movies and shows on demand,
              anytime, anywhere. With StreamVibe, you can enjoy a wide variety of content, including the latest
              blockbusters, classic movies, popular TV shows, and more. You can also create your own watchlists,
              so you can easily find the content you want to watch.
            </div>

            {/* Description for small screens */}
            <div className="md:hidden text-xs mx-8 text-[#999999]">
              StreamVibe is the best streaming experience for watching your favorite movies and shows on demand,
              anytime, anywhere.
            </div>

            {/* CTA Button */}
            <button className="my-3 text-white bg-[#E50000] p-4 rounded-md transition duration-150 ease-in-out">
              <div className="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                  <path strokeLinecap="round" strokeLinejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                </svg>
                Start Watching Now
              </div>
            </button>
          </div>
        </div>
      </section>

      {/* Browse by Genre Section */}
      <section className='bg-[rgba(1,1,1)]'>
        <div className="">
          <ScrollContent
            title="Explore our wide variety of categories"
            sub_title="Whether you're looking for a comedy to make you laugh, a drama to make you think, or a documentary to learn something new"
            items={Object.entries(moviesByGenre)}
            renderItem={([genre, movies]: [string, Movie[]]) => {
              return (
                <div className="w-[300px] h-[300px] bg-gray-800 rounded-lg p-4 mx-2">
                  <h3 className="text-xl text-white mb-2">{genre}</h3>
                  <div className="grid grid-cols-2 gap-2">
                    {movies.slice(0, 4).map((movie, idx) => (
                      <img
                        key={idx}
                        src={movie.Small_Thumbnail_Url}
                        alt={movie.Title}
                        className="w-full h-[120px] object-cover rounded"
                      />
                    ))}
                  </div>
                </div>
              );
            }}
          />
        </div>
      </section>



      {/* Device Section (uncomment if needed) */}
      <section>
        <div>
          <DeviceSection />
        </div>
      </section>

      {/* FAQ Section (uncomment if needed) */}
      <section>
        <div>
          <FAQ />
        </div>
      </section>
      <section>
        <div>
          <CTA />
        </div>
      </section>
      <div className='mt-20' >
        <Footer />
      </div>
    </MainLayout>
  );
}
