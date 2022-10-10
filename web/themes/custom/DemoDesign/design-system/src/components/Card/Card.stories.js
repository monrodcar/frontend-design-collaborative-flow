import { html, nothing } from 'lit-html'
import { ifDefined } from 'lit-html/directives/if-defined'
import { unsafeHTML } from 'lit-html/directives/unsafe-html'

import { sanitizeHTML } from '../../utils'

import './DcCard'

import demoCardImage from '../../assets/images/demo/demo.png'

const demoImage = `<article slot="media"><img src=${demoCardImage}></article>`

const Template = ({ variant, label, slotMedia, slotDefault, slotAction, hasAction }) => html`
  <dc-card variant=${ifDefined(variant)} label=${ifDefined(label)} ?has-action=${ifDefined(hasAction)}>
    ${slotMedia ? unsafeHTML(sanitizeHTML(slotMedia)) : nothing}
    ${slotDefault ? unsafeHTML(sanitizeHTML(slotDefault)) : nothing}
    ${slotAction && hasAction ? unsafeHTML(sanitizeHTML(slotAction)) : nothing}
  </dc-card>
`

export const Default = Template.bind({})
Default.args = {
  slotMedia: demoImage,
  label: 'H4 - Heading 4',
  hasAction: true,
  slotDefault: '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>',
  slotAction: '<a slot="action" href="#">Example action</a>'
}

export default {
  title: 'Molecules/Card',
  component: 'dc-card',
  argTypes: {
    slotMedia: {
      description: 'Slot for image.',
      table: {
        category: 'slots'
      },
      type: {
        summary: 'string'
      },
      control: 'text'
    }
  }
}
