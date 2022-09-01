import React from 'react'
import { useEffect } from 'react'
import { useState } from 'react'
import { useParams } from 'react-router-dom'

export default function BookDetailPage() {
  const [result, setResult] = useState(null)
  const params = useParams().id
  useEffect(() => {
    fetch(`http://localhost/wordpress-headless/wordpress/wp-json/wp/v2/pages/${params}`)
  .then(res => res.json())
  .then(data => setResult(data))
  }, [])
  console.log(result)
  return (
    <div>
      <div>
        <h4>{result? result.slug : "loading"}</h4>
        </div>
      {result? result.excerpt.rendered : "loading"}
    </div>
  )
}
