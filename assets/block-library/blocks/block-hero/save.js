function save({ attributes }) {
    const { title, description, imageMobileURL, imageDesktopURL } = attributes

    return (
        <section>
            <div className="container">
                <h1>{title}</h1>
                <p>{description}</p>
                <img src={imageMobileURL} className="" />
                <img src={imageDesktopURL} className="" />
            </div>
        </section>
    )
}

export default save