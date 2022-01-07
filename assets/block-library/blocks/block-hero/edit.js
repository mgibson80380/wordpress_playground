import { RichText } from '@wordpress/block-editor'

const { __ } = wp.i18n
const { Fragment } = wp.element
const { InspectorControls, MediaUpload, MediaUploadCheck } = wp.editor
const { PanelBody, Button } = wp.components
const ALLOWED_MEDIA_TYPES = ['image']

function edit({ attributes, setAttributes }) {
    const { title, description, imageMobileURL, imageDesktopURL } = attributes

    function handleInput(name, value) {
        setAttributes({ [name]: value })
    }
    const instructions = <p>{__('To edit the image, you need permission to upload media.', 'mg-blocks')}</p>

    return (
        <Fragment>
            <section>
                <div className="container">
                    <RichText key='editable' tagName='h1' placeholder='Title' className="text-3xl font-bold underline" value={title} onChange={value => handleInput('title', value)} />
                    <RichText key='editable' tagName='p' placeholder='Description' className='' value={description} onChange={value => handleInput('description', value)} />
                    <img src={imageMobileURL} className="" />
                    <img src={imageDesktopURL} className="" />
                </div>
            </section>

            <InspectorControls>
                <PanelBody title={__('Background settings', 'mg-blocks')} initialOpen={true}>
                    <MediaUploadCheck fallback={instructions}>
                        <MediaUpload
                            title={__('Image mobile', 'mg-blocks')}
                            onSelect={value => setAttributes({ imageMobileURL: value.url })}
                            allowedTypes={ALLOWED_MEDIA_TYPES}
                            value={imageMobileURL}
                            render={({ open }) => (
                                <div>
                                    <img src={imageMobileURL} className="" />
                                    <Button className={'editor-post-featured-image__toggle'} onClick={open}>
                                        {__('Set image for mobile', 'mg-blocks')}
                                    </Button>
                                </div>
                            )}
                        />
                        <MediaUpload
                            title={__('Image desktop', 'img-blocks')}
                            onSelect={value => setAttributes({ imageDesktopURL: value.url })}
                            allowedTypes={ALLOWED_MEDIA_TYPES}
                            value={imageDesktopURL}
                            render={({ open }) => (
                                <div>
                                    <img src={imageDesktopURL} className="" />
                                    <Button className={'editor-post-featured-image__toggle'} onClick={open}>
                                        {__('Set image for desktop', 'mg-blocks')}
                                    </Button>
                                </div>
                            )}
                        />
                    </MediaUploadCheck>
                </PanelBody>
            </InspectorControls>
        </Fragment>
    )
}

export default edit
