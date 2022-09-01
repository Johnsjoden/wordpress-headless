import React from 'react'
import { useEffect } from 'react'
import { useState } from 'react'
import { Link } from 'react-router-dom'
export default function BookPage() {
    const [result, setResult] = useState([])
    useEffect(() => {
      fetch("http://localhost/wordpress-headless/wordpress/wp-json/wp/v2/pages")
    .then(res => res.json())
    .then(data => setResult(data))
    }, [])
  return (
    <div>
      {result.map((item, index) => {
        return <div key={index}>
          <Link to={`${item.id}`}>{item.slug}</Link>
        </div>
      })}
    </div>
  )
}
