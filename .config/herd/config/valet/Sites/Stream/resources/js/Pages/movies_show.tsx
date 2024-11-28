import React from 'react'
import { Page } from '@inertiajs/core';
import { usePage } from '@inertiajs/react'
import MainLayout from '@/Layouts/MainLayout'
import Navbar from '@/Components/Navbar'
import Random from '@/Components/Random'

interface PageProps {
  randomContent: {
    Title: string;
    Description: string;
    Big_Thumbnail_Url: string;
  }
}

export default function movies_show() {
  const { randomContent } = usePage<PageProps>().props

  return (
    <MainLayout>
      <div className='pt-8'>
        <Navbar />
      </div>
      <section>
        <Random 
          title={randomContent.Title}
          description={randomContent.Description}
          thumbnailUrl={randomContent.Big_Thumbnail_Url}
        />
      </section>
    </MainLayout>
  )
}
