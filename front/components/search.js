import React from 'react'
import { StyleSheet, View, TextInput, Button, FlatList, Text } from 'react-native'
import champions from '../helpers/champions'
import ChampionItem from './ChampionItem';

const styles = StyleSheet.create({
	main_container: {
		flex: 1,
		marginTop: 20
	},
	textinput: {
		marginLeft: 5,
		marginRight: 5,
		height: 50,
		borderColor: '#000000',
		borderWidth: 1,
		paddingLeft: 5
	}
});

export default class Search extends React.Component {

	render() {
		return (
			<View style={styles.main_container}>
				<TextInput style={styles.textinput} placeholder='Titre du film'/>
				<Button title='Rechercher' onPress={() => {}}/>
				<FlatList 
					data={champions}
					keyExtractor={(item) => item.id}
					renderItem={({item}) => <ChampionItem champion = {item}/> }
				/>
			</View>
		)
	}
}